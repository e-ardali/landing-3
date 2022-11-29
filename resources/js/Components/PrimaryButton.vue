<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button class="btn" :type="type">
        <slot/>
    </button>
</template>
