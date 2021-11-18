import TomSelect from 'tom-select'
import 'tom-select/dist/css/tom-select.bootstrap5.css'

document.querySelectorAll('.select2-native').forEach(select => {
    const selectId = select.id
    const select2 = new TomSelect(`#${selectId}`, {
        allowEmptyOption: false
    })
})
