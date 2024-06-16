<?php

namespace App\Models;

class Forms
{

    private string $name;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public static function selectables(): array
    {
        $forms = [];
        $data = collect(config('forms'))->pluck('name')->toArray();

        foreach ($data as $item) {
            $forms[$item] = __('forms.labels.' . $item);
        }
        return $forms;

    }
}
