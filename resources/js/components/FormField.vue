<template>
    <DefaultField
        :field="currentField"
        :errors="errors"
        :show-help-text="showHelpText"
        :full-width-content="fullWidthContent"
    >
        <template #field>
            <input
                :id="currentField.attribute"
                type="text"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="currentField.name"
                v-model="value"
                v-maska
                :data-maska="mask"
            />
        </template>
    </DefaultField>
</template>

<script>
import {DependentFormField, HandlesValidationErrors} from 'laravel-nova'
import {vMaska} from 'maska'

export default {
    mixins: [DependentFormField, HandlesValidationErrors],

    directives: {maska: vMaska},

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.currentField.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.currentField.attribute, this.value || '')
        },
    },

    computed: {
        mask() {
            return this.currentField.mask;
        },
    },
}
</script>
