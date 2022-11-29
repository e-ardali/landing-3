<script setup>
import {computed} from 'vue';

const emit = defineEmits(['update:checked']);

const props = defineProps({
    checked: {
        type: [Array, Boolean],
        default: false,
    },
    value: {
        default: null,
    },
    label: {
        default: null,
    },
});

const proxyChecked = computed({
    get() {
        return props.checked;
    },

    set(val) {
        emit('update:checked', val);
    },
});


</script>

<template>
    <label class="form-check form-check-inline">
        <input type="checkbox"
               :value="value"
               v-model="proxyChecked"
               class="form-check-input">
        <span class="form-check-label">{{ label }}</span>
    </label>
</template>
