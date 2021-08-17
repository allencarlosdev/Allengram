<template>
    <input
        class="
            border-gray-300
            focus:border-gray-500
            focus:ring-6
            focus:ring-gray-100
            focus:ring-opacity-50
            rounded-md
            shadow-sm
        "
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>

<script>
export default {
    props: ["modelValue"],

    emits: ["update:modelValue"],

    methods: {
        focus() {
            this.$refs.input.focus();
        },
    },
};
</script>
