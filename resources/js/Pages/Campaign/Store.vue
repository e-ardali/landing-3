<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/inertia-vue3';
import Icon from "@/Components/Icon.vue";
import {Link} from '@inertiajs/inertia-vue3';
import {useToast} from "vue-toastification";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    record: Object,
});

const pageInfo = {
    title: 'افزودن کمپین'
}

const toast = useToast();

const form = useForm({
    title: props.record ? props.record.data.title : '',
    content: props.record ? props.record.data.content : '',
});

const submit = () => {
    if (props.record) {
        form.put(route('admin.campaigns.update', {campaign: props.record.data.id}), {
            onSuccess: () => {
                toast.success("عملیات با موفقیت انجام شد.");
            }
        });
    } else {
        form.post(route('admin.campaigns.store'), {
            onSuccess: () => {
                toast.success("عملیات با موفقیت انجام شد.");
            }
        });
    }
};
</script>

<template>
    <Head :title="pageInfo.title"/>
    <AuthenticatedLayout>
        <div class="row g-2 align-items-center my-2">
            <div class="col">
                <h1 class="page-title">{{ pageInfo.title }}</h1>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <Link :href="route('admin.campaigns.index')" class="btn btn-primary">
                        <icon name="arrow-narrow-start" size="18"/>
                        <span class="d-none d-md-inline-block">همه کمپین‌ها</span>
                    </Link>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row row-cards">
                    <div class="col-md-5">
                        <div class="mb-3 position-relative">
                            <InputLabel for="username" value="عنوان"/>
                            <div class="input-group input-group-flat" :class="{'is-invalid' : form.errors.title}">
                                <span class="input-group-text pe-1"
                                      :class="{'is-invalid' : form.errors.title}">کمپین</span>
                                <TextInput type="text" :error="form.errors.title" v-model="form.title"/>
                            </div>
                            <InputError :message="form.errors.title"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 position-relative">
                            <InputLabel for="username" value="توضیح کمپین"/>
                            <textarea rows="5" class="form-control" v-model="form.content"></textarea>
                            <InputError :message="form.errors.content"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <PrimaryButton class="btn-success" @click.prevent="submit" :disabled="form.processing">
                    ذخیره تغییرات
                </PrimaryButton>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
