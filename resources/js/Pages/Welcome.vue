<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    orders: Array,
    ordersMeta: Array,
    ordersLookup: Array,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="p-10 mt-20">
        <div class="bg-gray-900 py-10">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-white">
                            Orders
                        </h1>
                    </div>
                </div>
                <div class="mt-8 flow-root">
                    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-700">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">
                                            Order ID
                                        </th>
                                        <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                            Products
                                        </th>
                                        <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                            User ID
                                        </th>
                                        <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-white">
                                            Gross Amount
                                        </th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                            <span class="sr-only">More</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-800">
                                    <tr v-for="order in ordersLookup">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">
                                            {{  order.order_id }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                             {{  order.product_id }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                            {{  order.customer_id  }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">
                                            {{  order.product_gross_revenue  }}
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                            <a href="#" class="text-indigo-400 hover:text-indigo-300">Edit<span
                                                    class="sr-only">, Lindsay Walton</span></a>
                                        </td>
                                    </tr>

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style></style>
