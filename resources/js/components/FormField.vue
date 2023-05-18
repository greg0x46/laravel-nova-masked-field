<template>
    <DefaultField
        :field="field"
        :errors="errors"
        :show-help-text="showHelpText"
        :full-width-content="fullWidthContent"
    >
        <template #field>
            <input
                :id="field.attribute"
                type="text"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="field.name"
                v-model="value"
                v-maska
                :data-maska="mask"
            />
        </template>
    </DefaultField>
</template>

<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'
import {vMaska} from 'maska'

export default {
    mixins: [FormField, HandlesValidationErrors],

    directives: {maska: vMaska},

    props: ['resourceName', 'resourceId', 'field'],
    data: () => {
        return {
            mask: '',
        }
    },


    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },
    },

    created() {
        this.mask = this.field.mask
    }
}
</script>
