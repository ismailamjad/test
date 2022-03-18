<template>
        <div class="row">
            <div class="col-md-12" style="margin-top: 20px">
                <h2 class="text-left">All Posts</h2>
                    <Link :href="route('property.create')">
                                                ADD
                                            </Link>
                <div>

                 <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="
                                                    py-3
                                                    px-6
                                                    text-xs
                                                    font-medium
                                                    tracking-wider
                                                    text-left text-gray-700
                                                    uppercase
                                                    dark:text-gray-400
                                                "
                                            >
                                                Title
                                            </th>
                                            <th
                                                scope="col"
                                                class="
                                                    py-3
                                                    px-6
                                                    text-xs
                                                    font-medium
                                                    tracking-wider
                                                    text-left text-gray-700
                                                    uppercase
                                                    dark:text-gray-400
                                                "
                                            >
                                                Type
                                            </th>
                                            <th
                                                scope="col"
                                                class="
                                                    py-3
                                                    px-6
                                                    text-xs
                                                    font-medium
                                                    tracking-wider
                                                    text-left text-gray-700
                                                    uppercase
                                                    dark:text-gray-400
                                                "
                                            >
                                                Image
                                            </th>
                                            <th
                                                scope="col"
                                                class="
                                                    py-3
                                                    px-6
                                                    text-xs
                                                    font-medium
                                                    tracking-wider
                                                    text-left text-gray-700
                                                    uppercase
                                                    dark:text-gray-400
                                                "
                                            >
                                                Primary Color
                                            </th>
                                            <th
                                                scope="col"
                                                class="relative py-3 px-6"
                                            >
                                                Edit
                                            </th>

                                            <th
                                                scope="col"
                                                class="relative py-3 px-6"
                                            >
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="propert in property" :key="propert.id"
                                            class="
                                                bg-white
                                                border-b
                                                dark:bg-gray-800
                                                dark:border-gray-700
                                            "
                                        >
                                            <td
                                                class="
                                                    py-4
                                                    px-6
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                    whitespace-nowrap
                                                    dark:text-white
                                                "
                                            >
                                               {{propert.title}}
                                            </td>
                                            <td
                                                class="
                                                    py-4
                                                    px-6
                                                    text-sm text-gray-500
                                                    whitespace-nowrap
                                                    dark:text-gray-400
                                                "
                                            >
                                                {{propert.type}}
                                            </td>
                                            <td
                                                class="
                                                    py-4
                                                    px-6
                                                    text-sm text-gray-500
                                                    whitespace-nowrap
                                                    dark:text-gray-400
                                                "
                                            >
                                                {{propert.image}}
                                            </td>
                                            <td
                                                class="
                                                    py-4
                                                    px-6
                                                    text-sm text-gray-500
                                                    whitespace-nowrap
                                                    dark:text-gray-400
                                                "
                                            >
                                                {{propert.primary_color}}
                                            </td>
                                            <td
                                                class="
                                                    py-4
                                                    px-6
                                                    text-sm
                                                    font-medium
                                                    text-right
                                                    whitespace-nowrap
                                                "
                                            >
                                            <Link :href="route('property.edit' ,propert.id)">
                                                EDit
                                            </Link>
                                            
                                            </td>
                                             <td
                                                class="
                                                    py-4
                                                    px-6
                                                    text-sm
                                                    font-medium
                                                    text-right
                                                    whitespace-nowrap
                                                "
                                            >
                                            <Link method="delete" :href="route('property.destroy' ,propert.id)">
                                                Delete
                                            </Link>
                                            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                </div>
                
            </div>
        </div>

</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default{
    components:{
        Link
    },
    props:[
        'property'
    ]
}
</script>
