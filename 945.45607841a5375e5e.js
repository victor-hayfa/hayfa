"use strict";(self.webpackChunkhayfa=self.webpackChunkhayfa||[]).push([[945],{3945:(j,C,r)=>{r.r(C),r.d(C,{CategoriesStockModule:()=>H});var m=r(6895),u=r(1635),s=r(7155),S=r(8739),p=r(6308),l=r(4006),g=r(5412),t=r(4650),k=r(7009),y=r(4740),_=r(3162),v=r(4859),x=r(455),h=r(1206);function Z(e,i){1&e&&t._UZ(0,"mat-progress-bar",13)}let f=(()=>{class e{constructor(o,a,n,c,d){this.formBuilder=o,this._snackBar=a,this.categoryStockResource=n,this.dialog=c,this.data=d,this.loading=!1,this.savedChange=!1,this.categoryStock=this.data.categoryStock}ngOnInit(){this.initForm(),this.populateForm(this.categoryStock)}initForm(){let o=sessionStorage.getItem("account_id"),a=null!==o?parseInt(o):0;this.form=this.formBuilder.group({name:[null,l.kI.required],status:[!0],account_id:[a]})}save(o){if(this.form.valid){this.loading=!0;let a=this.form.value;this.categoryStock?this.categoryStockResource.update(this.categoryStock.id,a).then(n=>{this.categoryStock=n,this.savedChange=!0,this.openSnackBar("Salvo com sucesso!","Fechar","success"),o&&this.closeDialog()}).catch(n=>{this.openSnackBar(422==n.status?"Erro: J\xe1 existe um n\xedvel de usu\xe1rio com esse c\xf3digo.":"Erro ao salvar","Fechar","danger")}).finally(()=>{this.loading=!1}):this.categoryStockResource.create(a).then(n=>{this.categoryStock=n,this.savedChange=!0,this.openSnackBar("Salvo com sucesso!","Fechar","success"),o&&this.closeDialog()}).catch(n=>{this.openSnackBar(422==n.status?"Erro: J\xe1 existe uma categoria com esse nome.":"Erro ao salvar","Fechar","danger")}).finally(()=>{this.loading=!1})}}populateForm(o){this.form.patchValue(o)}openSnackBar(o,a,n){this._snackBar.open(o,a,{horizontalPosition:"right",verticalPosition:"bottom",duration:3e3,panelClass:"snackBar-"+n})}canSave(){return this.form.valid&&!this.loading}closeDialog(){this.savedChange?this.dialog.close(this.categoryStock):this.dialog.close()}}return e.\u0275fac=function(o){return new(o||e)(t.Y36(l.qu),t.Y36(k.ux),t.Y36(y.$),t.Y36(g.so),t.Y36(g.WI))},e.\u0275cmp=t.Xpm({type:e,selectors:[["app-category-stock-form"]],decls:18,vars:4,consts:[[3,"formGroup"],[1,"btn-close",3,"click"],["mat-dialog-title","","cdkDrag","","cdkDragRootElement",".cdk-overlay-pane","cdkDragHandle","",1,"dialog-header"],["mode","indeterminate",4,"ngIf"],[1,"dialog-body"],[1,"mb-2"],[1,"form-label"],[2,"color","#EC0606DD"],["type","text","formControlName","name",1,"form-control"],[1,"mb-3","mt-4"],["color","primary","formControlName","status"],[1,"dialog-footer"],["mat-button","",1,"btn-save",3,"disabled","click"],["mode","indeterminate"]],template:function(o,a){1&o&&(t.TgZ(0,"form",0)(1,"div",1),t.NdJ("click",function(){return a.closeDialog()}),t.qZA(),t.TgZ(2,"div",2),t._uU(3),t.qZA(),t.YNc(4,Z,1,0,"mat-progress-bar",3),t.TgZ(5,"div",4)(6,"div",5)(7,"label",6),t._uU(8,"Nome"),t.qZA(),t.TgZ(9,"span",7),t._uU(10," * "),t.qZA(),t._UZ(11,"input",8),t.qZA(),t.TgZ(12,"div",9)(13,"mat-slide-toggle",10),t._uU(14,"Status"),t.qZA()()(),t.TgZ(15,"div",11)(16,"button",12),t.NdJ("click",function(){return a.save(!0)}),t._uU(17,"Salvar e Fechar"),t.qZA()()()),2&o&&(t.Q6J("formGroup",a.form),t.xp6(3),t.Oqu(a.categoryStock?"Editar Categoria de Estoque":"Nova Categoria de Estoque"),t.xp6(1),t.Q6J("ngIf",a.loading),t.xp6(12),t.Q6J("disabled",!a.canSave()))},dependencies:[m.O5,_.pW,v.lW,l._Y,l.Fj,l.JJ,l.JL,l.sg,l.u,g.uh,x.Rr,h.Zt,h.Bh],styles:[".dialog-header[_ngcontent-%COMP%]{font-weight:400;font-size:18px;width:auto;border-bottom:1px solid #d9d9d9;padding:10px 15px;background-color:#f8f7f7;margin-bottom:0;height:50px;cursor:grab}.dialog-body[_ngcontent-%COMP%]{padding:20px;height:150px}.dialog-footer[_ngcontent-%COMP%]{border-top:1px solid #d9d9d9;background-color:#f8f7f7;height:60px}.btn-close[_ngcontent-%COMP%]{float:right;font-size:30px;margin-top:2px}"]}),e})();var b=r(2687),T=r(4868),A=r(4144),F=r(266);function B(e,i){1&e&&t._UZ(0,"mat-progress-bar",22)}function N(e,i){1&e&&(t.TgZ(0,"th",23),t._uU(1," C\xf3digo "),t.qZA())}function D(e,i){if(1&e&&(t.TgZ(0,"td",24),t._uU(1),t.qZA()),2&e){const o=i.$implicit;t.xp6(1),t.hij(" #",o.id," ")}}function M(e,i){1&e&&(t.TgZ(0,"th",23),t._uU(1," Nome "),t.qZA())}function Y(e,i){if(1&e&&(t.TgZ(0,"td",24),t._uU(1),t.qZA()),2&e){const o=i.$implicit;t.xp6(1),t.hij(" ",o.name," ")}}function L(e,i){1&e&&(t.TgZ(0,"th",23),t._uU(1," Status "),t.qZA())}function U(e,i){1&e&&(t.TgZ(0,"span",27),t._uU(1,"Ativo"),t.qZA())}function J(e,i){1&e&&(t.TgZ(0,"span",28),t._uU(1,"Inativo"),t.qZA())}function O(e,i){if(1&e&&(t.TgZ(0,"td",24),t.YNc(1,U,2,0,"span",25),t.YNc(2,J,2,0,"span",26),t.qZA()),2&e){const o=i.$implicit;t.xp6(1),t.Q6J("ngIf",o.status),t.xp6(1),t.Q6J("ngIf",!o.status)}}function P(e,i){1&e&&t._UZ(0,"th",29)}function E(e,i){if(1&e){const o=t.EpF();t.TgZ(0,"td",24)(1,"div",30)(2,"button",31),t.NdJ("click",function(){const c=t.CHM(o).$implicit,d=t.oxw();return t.KtG(d.openCategoriesStockDialog(c))}),t._UZ(3,"i",32),t.qZA(),t.TgZ(4,"button",33),t.NdJ("click",function(){const c=t.CHM(o).$implicit,d=t.oxw();return t.KtG(d.delete(c.id))}),t._UZ(5,"i",34),t.qZA()()()}}function R(e,i){1&e&&t._UZ(0,"tr",35)}function I(e,i){1&e&&t._UZ(0,"tr",36)}const Q=function(){return[25,50,100]},w=[{path:"",component:(()=>{class e{constructor(o,a,n,c,d,G){this._liveAnnouncer=o,this.dialog=a,this._snackBar=n,this.router=c,this.dialogService=d,this.categoriesStockResource=G,this.loading=!1,this.categoriesStock=[],this.status=!1,this.displayedColumns=["code","name","status","options"],this.dataSource=new s.by}ngOnInit(){this.downloadCategoriesStock()}ngAfterViewInit(){this.dataSource.sort=this.sort,this.dataSource.paginator=this.paginator}applyFilter(o){this.dataSource.filter=o.target.value.trim().toLowerCase()}sortChange(o){this._liveAnnouncer.announce(o.direction?`Sorted ${o.direction}ending`:"Sorting cleared")}openCategoriesStockDialog(o){this.dialog.open(f,{width:"500px",maxHeight:"100vh",panelClass:"dialog",autoFocus:!1,data:{categoryStock:o}}).afterClosed().subscribe(n=>{n&&this.downloadCategoriesStock()})}downloadCategoriesStock(){this.loading=!0,this.categoriesStockResource.list().then(o=>{this.dataSource.data=o,this.categoriesStock=o,this.status=o.status}).catch(o=>{this.openSnackBar("Erro ao listar","Fechar","danger"),console.log(o)}).finally(()=>{this.loading=!1})}delete(o){this.dialogService.openConfirmDialog("Excluir","Tem certeza que deseja excluir?").afterClosed().subscribe(a=>{a&&(this.loading=!0,this.categoriesStockResource.delete(o).then(()=>{this.downloadCategoriesStock(),this.openSnackBar("Exclu\xeddo com sucesso!","Fechar","success")}).catch(n=>{this.openSnackBar("Erro ao excluir","Fechar","danger")}).finally(()=>{this.loading=!1}))})}openSnackBar(o,a,n){this._snackBar.open(o,a,{horizontalPosition:"right",verticalPosition:"bottom",duration:3e3,panelClass:"snackBar-"+n})}}return e.\u0275fac=function(o){return new(o||e)(t.Y36(b.Kd),t.Y36(g.uw),t.Y36(k.ux),t.Y36(u.F0),t.Y36(T.x),t.Y36(y.$))},e.\u0275cmp=t.Xpm({type:e,selectors:[["app-category-stock-list"]],viewQuery:function(o,a){if(1&o&&(t.Gf(S.NW,5),t.Gf(p.YE,5)),2&o){let n;t.iGM(n=t.CRH())&&(a.paginator=n.first),t.iGM(n=t.CRH())&&(a.sort=n.first)}},decls:33,vars:6,consts:[["id","main",1,"main"],[1,"pagetitle"],[1,"border-loading"],["style","height: 3px; border-radius: 50px","color","accent","mode","indeterminate",4,"ngIf"],[1,"header-table"],[1,"d-flex","align-items-center","justify-content-between"],[1,"search_input_group","search-table","w-25","mt-4","mb-4"],[1,"mdi","mdi-magnify"],["matInput","","placeholder","Pesquisar",1,"search_input",3,"input"],["input",""],["mat-stroked-button","","type","button",1,"button-add",3,"click"],["mat-table","","matSort","",3,"dataSource","matSortChange"],["matColumnDef","code"],["mat-header-cell","","mat-sort-header","",4,"matHeaderCellDef"],["mat-cell","",4,"matCellDef"],["matColumnDef","name"],["matColumnDef","status"],["matColumnDef","options"],["mat-header-cell","",4,"matHeaderCellDef"],["mat-header-row","",4,"matHeaderRowDef"],["mat-row","",4,"matRowDef","matRowDefColumns"],[1,"mat-paginator",3,"pageSizeOptions"],["color","accent","mode","indeterminate",2,"height","3px","border-radius","50px"],["mat-header-cell","","mat-sort-header",""],["mat-cell",""],["class","badge bg-success",4,"ngIf"],["class","badge bg-danger",4,"ngIf"],[1,"badge","bg-success"],[1,"badge","bg-danger"],["mat-header-cell",""],[1,"mat-icon-no-color"],["matTooltip","Editar",1,"icons-options",3,"click"],[1,"mdi","mdi-square-edit-outline"],["matTooltip","Excluir",1,"icons-options",3,"click"],[1,"mdi","mdi-trash-can-outline"],["mat-header-row",""],["mat-row",""]],template:function(o,a){1&o&&(t.TgZ(0,"main",0)(1,"div",1)(2,"h1"),t._uU(3,"Categorias do Estoque"),t.qZA()(),t.TgZ(4,"div",2),t.YNc(5,B,1,0,"mat-progress-bar",3),t.qZA(),t.TgZ(6,"div",4)(7,"div",5)(8,"div",6),t._UZ(9,"i",7),t._uU(10,"\xa0 "),t.TgZ(11,"input",8,9),t.NdJ("input",function(c){return a.applyFilter(c)}),t.qZA()(),t.TgZ(13,"div")(14,"button",10),t.NdJ("click",function(){return a.openCategoriesStockDialog()}),t._uU(15,"Adicionar"),t.qZA()()(),t.TgZ(16,"div")(17,"table",11),t.NdJ("matSortChange",function(c){return a.sortChange(c)}),t.ynx(18,12),t.YNc(19,N,2,0,"th",13),t.YNc(20,D,2,1,"td",14),t.BQk(),t.ynx(21,15),t.YNc(22,M,2,0,"th",13),t.YNc(23,Y,2,1,"td",14),t.BQk(),t.ynx(24,16),t.YNc(25,L,2,0,"th",13),t.YNc(26,O,3,2,"td",14),t.BQk(),t.ynx(27,17),t.YNc(28,P,1,0,"th",18),t.YNc(29,E,6,0,"td",14),t.BQk(),t.YNc(30,R,1,0,"tr",19),t.YNc(31,I,1,0,"tr",20),t.qZA(),t._UZ(32,"mat-paginator",21),t.qZA()()()),2&o&&(t.xp6(5),t.Q6J("ngIf",a.loading),t.xp6(12),t.Q6J("dataSource",a.dataSource),t.xp6(13),t.Q6J("matHeaderRowDef",a.displayedColumns),t.xp6(1),t.Q6J("matRowDefColumns",a.displayedColumns),t.xp6(1),t.Q6J("pageSizeOptions",t.DdM(5,Q)))},dependencies:[m.O5,S.NW,_.pW,p.YE,p.nU,v.lW,A.Nt,F.gM,s.BZ,s.fO,s.as,s.w1,s.Dz,s.nj,s.ge,s.ev,s.XQ,s.Gk],styles:['table[_ngcontent-%COMP%]{width:100%}td[_ngcontent-%COMP%], th[_ngcontent-%COMP%]{width:30%}h1[_ngcontent-%COMP%]{margin-top:20px}.button-add[_ngcontent-%COMP%]{border-radius:10px;margin-right:20px;font-size:16px;background-color:#7048ef;color:#fff;display:flex;align-items:center}.mat-header-cell[_ngcontent-%COMP%]{color:#484848;background-color:#f8f7f7;font-size:15px;font-family:TT Commons DemiBold,sans-serif}th.mat-header-cell[_ngcontent-%COMP%]:last-of-type, td.mat-cell[_ngcontent-%COMP%]:last-of-type, td.mat-footer-cell[_ngcontent-%COMP%]:last-of-type{padding-right:0!important}.mdi-magnify[_ngcontent-%COMP%]:before{content:"\\f0349";font-size:smaller}.mat-paginator[_ngcontent-%COMP%]{background-color:#f8f7f7;border-radius:10px}']}),e})()},{path:"new",component:f},{path:":id/edit",component:f}];let z=(()=>{class e{}return e.\u0275fac=function(o){return new(o||e)},e.\u0275mod=t.oAB({type:e}),e.\u0275inj=t.cJS({imports:[u.Bz.forChild(w),u.Bz]}),e})();var q=r(1108);let H=(()=>{class e{}return e.\u0275fac=function(o){return new(o||e)},e.\u0275mod=t.oAB({type:e}),e.\u0275inj=t.cJS({imports:[m.ez,z,q.m,h._t]}),e})()}}]);