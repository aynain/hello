import {Router} from 'aurelia-router';
import {inject} from 'aurelia-framework';
import * as $ from 'jquery';
import {ValidationControllerFactory,ValidationRules,validateTrigger} from 'aurelia-validation';
import 'whatwg-fetch';
import {HttpClient as httpFetch, json} from 'aurelia-fetch-client';
import {HttpClient} from 'aurelia-fetch-client';
@inject(ValidationControllerFactory)

export class reviewExpenses {
  controller=null;
  public eid;
  public apid;
  public expensedata = [];
  public id ;

  constructor(controllerFactory) {
    this.id = 1;
    this.controller=controllerFactory.createForCurrentScope();
    this.runvalidation();
    this.expensedatas();

  }
  expensedatas() {
    this.id=this.id+1;
    console.log(this.id);
    // this.expensedatas();

    let client = new HttpClient();
    client.fetch('http://www.money-game.com/api/reviewexpense')
      .then(response => response.json())
      .then(data => {
        this.expensedata = data;
        console.log(this.expensedata);
      });
  }


  approvedbtn(id){
    this.apid=id+1;
    var client =new HttpClient();
    client.fetch('http://www.money-game.com/api/approvedExpense/2/'+this.apid,
      {
        method: 'post'
      })
      .then(response=>response.text()).then(result=>{

      console.log(result);
      this.expensedatas();
    });
    // alert('hi');
  }

  validation(id) {
    this.eid=id;
    $("#myModal").modal();

  }
  decline(){

    var client =new HttpClient();
    client.fetch('http://www.money-game.com/api/expensedeclined/0/'+this.eid,
      {
        method: 'post'
      })
      .then(response=>response.text()).then(result=>{

      console.log(result);
      this.expensedatas();
    });



  }

  runvalidation() {
    this.controller.validate()
    ValidationRules
      .ensure('text')
      .required().withMessage('text is required')
      .maxLength(20).withMessage('input characters exceed limit')
      .on(this);
  }
}
