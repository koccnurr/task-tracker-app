import { Routes } from '@angular/router';
import { ProjectComponent } from './component/project/project.component';
import { ContactComponent } from './component/contact/contact.component';
import { HomeComponent } from './component/home/home.component';

export const routes: Routes = [
    {
        path: '',  // Remove the slash at the beginning
        component: HomeComponent
    },
    {
        path: 'project',  // Remove the slash at the beginning
        component: ProjectComponent
    },
    {
        path: 'contact',
        component: ContactComponent
    }
];
