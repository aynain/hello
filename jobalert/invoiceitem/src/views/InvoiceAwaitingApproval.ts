import {HttpClient as httpFetch, json} from 'aurelia-fetch-client';
import {inject} from 'aurelia-framework';
import {HttpClient} from 'aurelia-fetch-client';
import {RouterConfiguration, Router} from 'aurelia-router';
@inject(Router)
export class InvoiceAwaitingApproval {

  public invoicedata = [];
  public item = [];
  constructor(private router:Router) {

    this.invoicedatas();
  }
    invoicedatas(){
      let client = new HttpClient();
      client.fetch('http://www.money-game.com/api/invoiceapproval')
        .then(response => response.json())
        .then(data => {
          this.invoicedata = data;
          console.log(this.invoicedata);
        });

    }

  invoiceitem(id){
    this.router.navigateToRoute('InvoiceItemForApproval',{id:id});
    // let client = new HttpClient();
    // client.fetch('http://www.money-game.com/api/invoice/'+$id)
    //   .then(response => response.json())
    //   .then(data => {
    //     this.item = data;
    //     console.log(this.item);
    //   });
}
}
