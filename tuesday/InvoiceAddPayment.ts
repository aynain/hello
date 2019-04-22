import {inject} from 'aurelia-framework';
import 'whatwg-fetch';
import {HttpClient as httpFetch, json} from 'aurelia-fetch-client';
import {RouterConfiguration, Router} from 'aurelia-router';
import {ValidationControllerFactory, ValidationRules} from 'aurelia-validation';
@inject(Router, ValidationControllerFactory)
export class InvoiceAddPayment {
  public payment_id;
  public amountPaid;
  public datePaid;
  public paidFrom;
  public paidBy;
  public router;
  controller = null;

  constructor(router, controllerFactory) {
    this.router = router;
    this.controller = controllerFactory.createForCurrentScope();
    this.runValidation();
  }
  runValidation() {
    this.controller.validate()
    ValidationRules
      .ensure('amount_Paid')
      .required().withMessage('Amount Paid field is required')
      .maxLength(10)
      .withMessage('Amount Paid cannot be greater than 10 digits')
      .minLength(1)
      .withMessage('Amount Paid cannot be less than 1 digit')
      .matches(/^[0-9]+$/)
      .withMessage('Amount only contain numbers')
      .ensure('date_Paid')
      .required().withMessage('Date field is required')
      .ensure('paid_From')
      .required().withMessage('Paid From field is required')
      .minLength(3).withMessage("Paid From must be greater than 3 characters")
      .maxLength(30).withMessage("Paid From must be less than 30 characters")
      .ensure('paid_By')
      .required().withMessage('Paid By field is required')
      .minLength(1).withMessage('Paid By cannot less than 1 characters')
      .on(this);
  }
  public validations() {
    this.controller.validate()
      .then(result => {
        if (result.valid) {
          this.saveTheAmountPaid();
        } else {
          console.log('Failed to validate');
        }
      });
  }
  saveTheAmountPaid() {
    var data = {
      payment_id: this.payment_id,
      amount_paid: this.amountPaid,
      date_paid: this.datePaid,
      paid_from: this.paidFrom,
      paid_by: this.paidBy
    };
    let client = new httpFetch();
    client.fetch('http://www.money-game.com/api/save-invoice-payment', {
      method: 'post',
      body: json(data)
    })
      .then(res => res.json())
      .then(res => {
        console.log(res);
      })
    this.router.navigate('');
  }
  activate(params) {
    this.payment_id=params.id;
  }
}
