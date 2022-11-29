<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import Icon from "@/Components/Icon.vue";
import {Link} from '@inertiajs/inertia-vue3';
import DeleteRecord from "@/Components/DeleteRecord.vue";

const pageInfo = {
    title: 'لیست کمپین‌ها'
}

const props = defineProps({
    records: Object,
});

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
                    <Link :href="route('admin.campaigns.create')" class="btn btn-primary">
                        <icon name="plus" size="18"/>
                        <span class="d-none d-md-inline-block">افزودن کمپین</span>
                    </Link>
                </div>
            </div>
        </div>
        <template v-if="records.data.length">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-mobile-md card-table">
                        <thead>
                        <tr>
                            <th>عنوان</th>
                            <th class="w-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="record in records.data">
                            <td data-label="Name">
                                <div class="font-weight-medium">{{ record.title }}</div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <Link :href="route('admin.campaigns.edit', {campaign: record.id})"
                                          class="link-success me-2">
                                        <icon name="edit"/>
                                    </Link>
                                    <delete-record :modal-id="'delete-record-' + record.id"
                                                   :url="route('admin.campaigns.destroy', {campaign: record.id})"/>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </template>
        <template v-else>
            <div class="alert alert-danger" role="alert">
                <span class="fs-3">رکوردی یافت نشد.</span>
            </div>
        </template>
    </AuthenticatedLayout>
</template>
