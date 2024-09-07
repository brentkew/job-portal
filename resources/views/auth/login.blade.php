<x-layout>
    <div class="space-y-12">
        <x-page-heading>Login</x-page-heading>
        <x-forms.form action="/login" method="POST">

            <x-forms.input label="Email" name="email" type="input"></x-forms.input>
            <x-forms.input label="Password" name="password" type="password"></x-forms.input>

            <x-forms.divider></x-forms.divider>
            <x-forms.button>Login</x-forms.button>

        </x-forms.form>

    </div>

</x-layout>
