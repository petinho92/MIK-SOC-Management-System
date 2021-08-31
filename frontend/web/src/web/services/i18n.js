import {dictionary, locale, _} from "svelte-i18n";

const langurl = '../lang/{locale}.json';

function setupI18n({withLocale: _locale} = {withLocale: 'hu'}){
    const langPath = langurl.replace('{locale}', _locale);

    // return fetch(langPath)
    //     .then(response => response.json())
    //     .then(messages => {
    //         dictionary.set({ [_locale]: messages});
    //
    //         locale.set(_locale);
    //     })


}export {_,setupI18n};