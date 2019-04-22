import {Aurelia} from 'aurelia-framework';
import {PLATFORM} from 'aurelia-pal';
import {RouterConfiguration, Router} from 'aurelia-router';
export class App {
  public message: string;
  router: Router;
  configureRouter(config:RouterConfiguration, router: Router):void {
    this.router = router;
    config.map([
      { route: '',  name: 'view', moduleId: PLATFORM.moduleName('views/reviewExpenses'), nav: true, title: 'ReviewExpense'}
    ]);
    this.router = router;
  }
}
