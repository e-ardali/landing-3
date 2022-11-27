<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    username: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />
        <div class="card card-md">
            <div class="card-header">
                <h2 class="card-title fs-2">Login</h2>
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <div class="mb-3 position-relative">
                        <InputLabel for="username" value="Username" />

                        <TextInput
                            id="username"
                            type="text"
                            :class="{'is-invalid' : form.errors.username}"
                            v-model="form.username"
                            autofocus
                            autocomplete="username"
                        />

                        <InputError :message="form.errors.username" />
                    </div>

                    <div class="mb-3 position-relative">
                        <InputLabel for="password" value="Password" />

                        <TextInput
                            id="password"
                            type="password"
                            :class="{'is-invalid' : form.errors.username}"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                        />

                        <InputError :message="form.errors.password" />
                    </div>

                    <label class="mb-3 position-relative">
                        <Checkbox name="remember" v-model:checked="form.remember" label="Remember me" />
                    </label>

                    <div class="mb-3">
<!--                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Forgot your password?
                        </Link>-->

                        <PrimaryButton class="btn btn-primary w-100" :disabled="form.processing">
                            Log in
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
