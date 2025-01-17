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
        <div class="grid-span-1 border-2">
            <div v-for="c in customer" class="flex justify-between border-2">
                <div>
                {{ c.name }}
                </div>
                <div>
                    {{ c.route_id }}
                </div>
            </div>
        </div>

        <div class="grid-span-1 border-2">
            <div v-for="w in week" class="flex justify-between border-2">
                <div>
                    {{ w.name }}
                </div>
            </div>
        </div>

        <div class="grid-span-1 border-2">
            <div v-for="r in route" class="flex justify-between border-2">
                <div>
                    {{ r.name }}
                </div>
            </div>
        </div>
    </div>
    
</template>