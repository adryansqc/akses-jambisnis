<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Pages\Page;
use Livewire\WithFileUploads;
use App\Models\Setting;
use Filament\Notifications\Notification;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;

class Settings extends Page implements Forms\Contracts\HasForms
{
    use WithFileUploads, Forms\Concerns\InteractsWithForms, HasPageShield;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog;
    protected string $view = 'filament.pages.settings';
    protected static ?string $navigationLabel = 'Pengaturan';
    protected static ?string $title = 'Pengaturan';
    protected static ?int $navigationSort = 101;

    public $settings;
    public $items = [];

    public function mount(): void
    {
        $this->settings = Setting::with('settingItems')->orderBy('order')->get();

        foreach ($this->settings as $setting) {
            foreach ($setting->settingItems as $item) {
                $this->items[$item->id] = [
                    'name' => $item->name,
                    'value' => $item->value,
                    'helper_text' => $item->helper_text,
                ];
            }
        }

        $this->form->fill([
            'items' => $this->items,
        ]);
    }

    protected function getFormSchema(): array
    {
        $schema = [];

        foreach ($this->settings as $setting) {
            $settingFields = [];

            foreach ($setting->settingItems as $item) {
                $id = $item->id;

                $nameField = TextInput::make("items.$id.name")
                    ->label("Judul")
                    ->required();

                switch ($item->type) {
                    case 'text':
                        $valueField = TextInput::make("items.$id.value")
                            ->label("Nilai");
                        break;

                    case 'textarea':
                        $valueField = Textarea::make("items.$id.value")
                            ->label("Nilai")
                            ->rows(5);
                        break;

                    case 'textarea_editor':
                        $valueField = RichEditor::make("items.$id.value")
                            ->label("Nilai")
                            ->toolbarButtons([]);
                        break;

                    case 'url':
                        $valueField = TextInput::make("items.$id.value")
                            ->label("Nilai")
                            ->url();
                        break;

                    case 'number':
                        $valueField = TextInput::make("items.$id.value")
                            ->label("Nilai")
                            ->numeric();
                        break;

                    case 'email':
                        $valueField = TextInput::make("items.$id.value")
                            ->label("Nilai")
                            ->email();
                        break;

                    case 'color':
                        $valueField = ColorPicker::make("items.$id.value")
                            ->label("Nilai");
                        break;

                    case 'file':
                        $valueField = FileUpload::make("items.$id.value")
                            ->label("Nilai")
                            ->disk('public')
                            ->directory('setting-items')
                            ->openable()
                            ->maxSize(2048);
                        break;

                    default:
                        continue 2;
                }

                $helperField = Textarea::make("items.$id.helper_text")
                    ->label("Bio")
                    ->rows(2);

                $settingFields[] = Section::make($item->name)
                    ->schema([
                        $nameField,
                        $valueField,
                        $helperField,
                    ])
                    ->collapsible();
            }

            if (!empty($settingFields)) {
                $schema[] = Section::make($setting->name)
                    ->schema($settingFields);
            }
        }

        return $schema;
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($this->settings as $setting) {
            foreach ($setting->settingItems as $item) {
                $itemId = $item->id;

                $item->name = $data['items'][$itemId]['name'] ?? $item->name;
                $item->value = $data['items'][$itemId]['value'] ?? null;
                $item->helper_text = $data['items'][$itemId]['helper_text'] ?? null;

                $item->save();
            }
        }

        Notification::make()
            ->title('Succeed')
            ->body('Settings updated successfully.')
            ->success()
            ->send();
    }
}
