<script setup>
import {onMounted, ref} from 'vue';

defineProps(['modelValue', 'error']);

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({focus: () => input.value.focus()});
</script>

<template>
    <input
        class="form-control"
        :class="{'is-invalid is-invalid-lite' : error}"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>
