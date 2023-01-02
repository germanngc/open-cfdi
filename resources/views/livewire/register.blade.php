<div>
    <form class="mx-auto max-w-screen-xs max-w-xs">
        <div class="grid grid-cols-2">
            <div class="col-span-2 mb-2">
                <x-form.input label="Name:" type="text" wireModel="name" />
            </div>

            <div class="col-span-2 mb-2">
                <x-form.input label="Email:" type="email" wireModel="email" />
            </div>

            <div class="col-span-2 mb-2">
                <x-form.input label="Password:" type="password" wireModel="password" />
            </div>

            <div class="col-span-2 mb-2">
                <x-form.input label="Password confirmation:" type="password" wireModel="password_confirmed" />
            </div>

            <div class="col-md-12">
                <a class="text-primary" wire:click.prevent="register"><strong>Login</strong></a>
            </div>
        </div>
    </form>
</div>
