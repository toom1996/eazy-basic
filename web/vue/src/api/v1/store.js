import { post, get } from '../../utils/request'

export function storeSearch (data) { return get('/api/v1/store/search', data) }