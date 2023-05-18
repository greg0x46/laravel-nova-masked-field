import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'


Nova.booting((app, store) => {
    app.component('index-masked-field', IndexField)
    app.component('detail-masked-field', DetailField)
    app.component('form-masked-field', FormField)
})
