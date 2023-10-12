<?php

namespace App\Listeners;

use App\Events\DocumentSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Native\Laravel\Dialog;
use Native\Laravel\Facades\Window;
use Ramsey\Uuid\Uuid;

class StoreDocument
{
    public function __construct()
    {
    }

    public function handle(DocumentSaved $event): void
    {
        $storagePath = Storage::disk('user_documents')->path('OpenSketch');
        $path = Dialog::new()
            ->title('Save Sketch Book')
            ->asSheet()
            ->defaultPath($storagePath)
            ->save();

        if (null === $path) {
            return;
        }

        $id = Uuid::uuid4();
        $routeParams = [
            'id' => $id->toString(),
        ];

        Storage::put($path . '.json', json_encode($routeParams, JSON_THROW_ON_ERROR));

        /** @var \Native\Laravel\Windows\WindowManager $window */
        $window = Window::getFacadeRoot();

        Window::open('welcome');
        Window::close('sketch-book');
        Window::open('sketch-book')
            ->hideMenu(false)
            ->route('sketch-book', $routeParams)
        ;
        $window->maximize('sketch-book');

        Window::close('welcome');
    }
}