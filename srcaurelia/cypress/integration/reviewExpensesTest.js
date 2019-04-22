describe('reviewExpense',function(){
  it('Navigate to site',function(){
    cy.visit('http://localhost:8082');
    cy.log('Site visit Successfully');
    cy.get('title').contains('ReviewExpense');
    cy.log('title visit successfully');
    cy.get('#img');
    cy.log('image found');
    cy.get("table").contains('th','Price');
    cy.get("table").contains('th','Description');
    cy.get("table").contains('th','Spent_at');
    cy.get("table").contains('th','Spent_on');
    cy.get("table").contains('th','Account');
    cy.get("table").contains('th','SubTotal');
    cy.get("table").contains('th','Tax');
    cy.get("table").contains('th','Total');
    cy.get("table").contains('th','Action');
    cy.get("table").contains('th','Sumitted_to');
    cy.log("th found");
    cy.get('tbody>tr').eq(0);
    cy.get("#approve").should('be.visible');
    cy.log("Approve button found");
    cy.get('#decline').click();
    cy.log("Decline button found");
    cy.get("#myModal");
    cy.log("Modal found");
    cy.get("#title").contains("Request declined");
    cy.log("Modal title found");
    cy.log("Check description label in modal")
    cy.get("#text").should('be.visible');
    cy.get("#btn-closed").should('be.visible');
    cy.log("Modal close button found");
    cy.get('#text')
      .type('abcdefghijklmn')
    cy.get('#text').clear()
      .type('abcd efgh ijkl mnop qrst uvwx yz abcdefg');
    cy.get('form').submit();
    cy.get('#error1').should('be.visible');




  });
});
