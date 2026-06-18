import './bootstrap';import '../css/app.css';import React from 'react';import {createRoot} from 'react-dom/client';import {createInertiaApp,Head} from '@inertiajs/react';
createInertiaApp({resolve:name=>import(`./Pages/${name}.jsx`),setup({el,App,props}){createRoot(el).render(<App {...props}/>);},title:title=>`${title} | SalonOS`});
export {Head};
