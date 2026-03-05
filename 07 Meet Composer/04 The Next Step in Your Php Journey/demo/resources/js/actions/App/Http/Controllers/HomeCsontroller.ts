import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\HomeCsontroller::__invoke
 * @see app/Http/Controllers/HomeCsontroller.php:11
 * @route '/'
 */
const HomeCsontroller = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: HomeCsontroller.url(options),
    method: 'get',
})

HomeCsontroller.definition = {
    methods: ["get","head"],
    url: '/',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\HomeCsontroller::__invoke
 * @see app/Http/Controllers/HomeCsontroller.php:11
 * @route '/'
 */
HomeCsontroller.url = (options?: RouteQueryOptions) => {
    return HomeCsontroller.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\HomeCsontroller::__invoke
 * @see app/Http/Controllers/HomeCsontroller.php:11
 * @route '/'
 */
HomeCsontroller.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: HomeCsontroller.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\HomeCsontroller::__invoke
 * @see app/Http/Controllers/HomeCsontroller.php:11
 * @route '/'
 */
HomeCsontroller.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: HomeCsontroller.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\HomeCsontroller::__invoke
 * @see app/Http/Controllers/HomeCsontroller.php:11
 * @route '/'
 */
    const HomeCsontrollerForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: HomeCsontroller.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\HomeCsontroller::__invoke
 * @see app/Http/Controllers/HomeCsontroller.php:11
 * @route '/'
 */
        HomeCsontrollerForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: HomeCsontroller.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\HomeCsontroller::__invoke
 * @see app/Http/Controllers/HomeCsontroller.php:11
 * @route '/'
 */
        HomeCsontrollerForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: HomeCsontroller.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    HomeCsontroller.form = HomeCsontrollerForm
export default HomeCsontroller