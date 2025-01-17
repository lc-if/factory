<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    customer: {required: false, type: Object, default: () => {}},
    week: {required: false, type: Object, default: () => {}},
    route: {required: false, type: Object, defualt: () => {}}
});

</script>

<template>
    <div class="grid grid-cols-3 p-4">
        <div class="grid-span-1">
            {{ customer }}
        </div>
        <div class="grid-span-1">
            {{ week }}
        </div>
        <div class="grid-span-1">
            {{ route }}
        </div>
    </div>
    
</template>