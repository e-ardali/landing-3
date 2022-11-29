<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import Icon from "@/Components/Icon.vue";

const menu = [
    {
        title: 'داشبورد',
        icon: 'home',
        url: route('admin.dashboard'),
        isActive: route().current('admin.dashboard'),
        sub: []
    },
    {
        title: 'کمپین‌ها',
        icon: 'layout-grid',
        url: '',
        isActive: route().current('admin.campaigns.*'),
        sub: [
            {
                title: 'لیست کمپین‌ها',
                url: route('admin.campaigns.index'),
            },
            {
                title: 'افزودن کمپین',
                url: route('admin.campaigns.create'),
            }
        ]
    }
]

</script>

<template>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <template v-for="item in menu">
            <template v-if="item.sub.length">
                <li class="nav-item dropdown" :class="{active : item.isActive}">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <icon class="me-2 text-muted" :name="item.icon"/>
                        <span class="nav-link-title">{{ item.title }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li v-for="innerItem in item.sub">
                            <Link class="dropdown-item" :href="innerItem.url">{{ innerItem.title }}</Link>
                        </li>
                    </ul>
                </li>
            </template>
            <template v-else>
                <li class="nav-item" :class="{active : item.isActive}">
                    <Link class="nav-link" :href="item.url">
                        <icon class="me-2 text-muted" :name="item.icon"/>
                        <span class="nav-link-title">{{ item.title }}</span>
                    </Link>
                </li>
            </template>
        </template>
    </ul>
</template>
