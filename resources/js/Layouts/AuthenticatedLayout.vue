<script setup>
import {ref} from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/inertia-vue3';
import Icon from "@/Components/Icon.vue";
import NavBar from "@/Components/NavBar.vue";
</script>

<template>
    <div class="page">
        <header class="fixed-top">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-xl">
                    <Link :href="route('admin.dashboard')" class="me-3">
                        <application-logo/>
                    </Link>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top-nav-bar"
                            aria-controls="top-nav-bar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="top-nav-bar">
                        <nav-bar/>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                               aria-label="Open user menu">
                                <icon name="user-circle"/>
                                <div class="d-none d-xl-block ps-2">
                                    <div>{{ $page.props.auth.user.name }}</div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <a href="#" class="dropdown-item">پروفایل</a>
                                <div class="dropdown-divider"></div>
                                <Link :href="route('logout')" class="dropdown-item" method="post" as="button">خروج
                                </Link>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </header>
        <div class="container-xl py-5">
            <slot/>
        </div>
    </div>
</template>
