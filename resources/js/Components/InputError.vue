<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message" class="invalid-tooltip">
        {{ message }}
    </div>
</template>
