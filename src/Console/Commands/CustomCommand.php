<?php

namespace Mengdodo\LaravelTools\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CustomCommand extends GeneratorCommand
{

    /**
     * @return string|void
     */
    protected function getStub(){

    }

    /**
     * Execute the console command.
     *
     * @return bool|null
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $getNameInput = $this->getNameInput().$this->type;
        $name = $this->qualifyClass($getNameInput);
        $path = $this->getPath($name);
        // First we will check to see if the class already exists. If it does, we don't want
        // to create the class and overwrite the user's code. So, we will bail out so the
        // code is untouched. Otherwise, we will continue generating this class' files.
        if ((! $this->hasOption('force') ||
                ! $this->option('force')) &&
            $this->alreadyExists($getNameInput)) {
            $this->error($this->type.' already exists!');
            return false;
        }

        // Next, we will generate the path to the location where this class' file should get
        // written. Then, we will build the class and make the proper replacements on the
        // stub files so that it gets the correctly formatted namespace and class name.
        $this->makeDirectory($path);
        substr(app()->version(),0,1) == 5
            ? $this->files->put($path, $this->buildClass($name))
            : $this->files->put($path, $this->sortImports($this->buildClass($name)));
        ;
        $this->info($this->type.' created successfully.');
    }
}
