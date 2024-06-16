<?php

namespace App\Http\Controllers;

use Aboleon\MetaFramework\Services\Validation\ValidationTrait;
use Aboleon\MetaFramework\Traits\Responses;
use App\Traits\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Throwable;

class FormController extends Controller
{
    use Responses;
    use Users;
    use ValidationTrait;

    private string $form;
    private array $config;

    public function distribute(string $form): RedirectResponse
    {
        $this->form = $form;

        $this->config = collect(config('forms'))->where('name', $this->form)->first();


        if (!$this->config) {
            $this->responseWarning("Le formulaire n'est pas configuré");
            return $this->sendResponse();
        }

        if (method_exists($this, 'process_' . $this->form)) {
            return $this->{'process_' . $this->form}();
        } else {
            $this->responseWarning("Le formulaire n'existe pas.");
            return $this->sendResponse();
        }
    }

    private function process_contact(): RedirectResponse
    {
        return $this->genericSender();
    }

    /*
        protected function process_create_account(): RedirectResponse
        {
            $this->validation_rules['user_type'] = [new PublicUserType];
            $this->validation_rules['create_account_accept_terms'] = 'accepted';
            $this->validation_messages['create_account_accept_terms.accepted'] = trans('validation.create_account_accept_terms');
            $this->basicUserValidation();
            $this->generatePasswordForNewUser();


            try {
                $user = User::create($this->validated_data);
                $user->roles()->save(new UserRole(['role_id' => $user->userTypes()[request('user_type')]['id']]));

                (new SendUserWelcomeEmail($user, $this->public_password))();
                event(new Registered($user));


                $this->responseSuccess(__('account.created'));

            } catch (Throwable $e) {
                $this->responseException($e);
            }
            return $this->sendResponse();
        }
    */
    protected function requestValidation(): void
    {
        foreach ($this->config['fields'] as $field) {
            $this->validation_messages[$field['name'] . '.required'] = __('forms.' . $field['name']) . " est une information est nécessaire.";
            $this->validation_rules[$field['name']] = 'required';
            if ($field['type'] == 'email') {
                $this->validation_messages[$field['type'] . '.email'] = __('forms.' . $field['name']) . " n'est pas une adresse valide";
                $this->validation_rules[$field['name']] = 'email';
            }

        }
    }

    protected function genericSender(): RedirectResponse
    {
        $this->requestValidation();
        $this->validation();

        $class = "\App\Mail\\" . Str::studly($this->form);

        try {
            Mail::to($this->config['to'])->send(new $class);
            $this->responseSuccess($this->config['confirmation']);
        } catch (Throwable $e) {
            $this->responseException($e);
        }

        return $this->sendResponse();
    }

}
