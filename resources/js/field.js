import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'
import Maska from 'maska'

Nova.booting((app, store) => {
    app.use(Maska)
    app.component('index-masked-field', IndexField)
    app.component('detail-masked-field', DetailField)
    app.component('form-masked-field', FormField)
})
