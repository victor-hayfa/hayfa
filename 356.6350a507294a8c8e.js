"use strict";(self.webpackChunkhayfa=self.webpackChunkhayfa||[]).push([[356],{2356:(at,F,s)=>{s.r(F),s.d(F,{StockFlowersModule:()=>et});var u=s(6895),p=s(1635),c=s(7155),k=s(8739),g=s(6308),Z=s(5841),l=s(4006),d=s(5412),t=s(4650),_=s(7009),C=s(3297),w=s(3162),v=s(9549),S=s(4859),x=s(455),f=s(1206);function T(e,a){1&e&&t._UZ(0,"mat-progress-bar",22)}function b(e,a){1&e&&(t.TgZ(0,"mat-label"),t._uU(1,"Escolha a imagem"),t.qZA())}let h=(()=>{class e{constructor(o,n,i,r,m){this.formBuilder=o,this._snackBar=n,this.stockFlowersResource=i,this.dialog=r,this.data=m,this.loading=!1,this.savedChange=!1,this.stockFlower=this.data.stockFlower}ngOnInit(){this.initForm(),this.populateForm(this.stockFlower)}initForm(){let o=sessionStorage.getItem("account_id"),n=null!==o?parseInt(o):0;this.form=this.formBuilder.group({image:[null],code:[null,l.kI.required],name:[null,l.kI.required],quantity:[null,l.kI.required],formula:[null,l.kI.required],status:[!0],account_id:[n]})}save(o){if(this.form.valid){this.loading=!0;const n=new FormData;n.append("image",this.selectedFiles),n.append("name",this.form.value.name),n.append("code",this.form.value.code),n.append("quantity",this.form.value.quantity),n.append("formula",this.form.value.formula),n.append("status",this.form.value.status),n.append("account_id",this.form.value.account_id),this.stockFlower?this.stockFlowersResource.updateFile(this.stockFlower.id,n).then(i=>{this.stockFlower=i,this.savedChange=!0,this.openSnackBar("Salvo com sucesso!","Fechar","success"),o&&this.closeDialog()}).catch(i=>{this.openSnackBar(422==i.status?"Erro: J\xe1 existe um item com esse c\xf3digo.":"Erro ao salvar","Fechar","danger")}).finally(()=>{this.loading=!1}):this.stockFlowersResource.create(n).then(i=>{this.stockFlower=i,this.savedChange=!0,this.openSnackBar("Salvo com sucesso!","Fechar","success"),o&&this.closeDialog()}).catch(i=>{this.openSnackBar(422==i.status?"Erro: J\xe1 existe um item com esse c\xf3digo.":"Erro ao salvar","Fechar","danger")}).finally(()=>{this.loading=!1})}}populateForm(o){this.form.patchValue(o)}openSnackBar(o,n,i){this._snackBar.open(o,n,{horizontalPosition:"right",verticalPosition:"bottom",duration:3e3,panelClass:"snackBar-"+i})}canSave(){return this.form.valid&&!this.loading}closeDialog(){this.savedChange?this.dialog.close(this.stockFlower):this.dialog.close()}selectFile(o){this.selectedFiles=o.target.files[0]}}return e.\u0275fac=function(o){return new(o||e)(t.Y36(l.qu),t.Y36(_.ux),t.Y36(C.k),t.Y36(d.so),t.Y36(d.WI))},e.\u0275cmp=t.Xpm({type:e,selectors:[["app-stock-flowers-form"]],decls:41,vars:4,consts:[["enctype","multipart/form-data",3,"formGroup"],[1,"btn-close",3,"click"],["mat-dialog-title","","cdkDrag","","cdkDragRootElement",".cdk-overlay-pane","cdkDragHandle","",1,"dialog-header"],["mode","indeterminate",4,"ngIf"],[1,"dialog-body"],[1,"row"],[1,"mb-3","col-md-6"],[1,"form-label"],[2,"color","#EC0606DD"],["type","text","formControlName","code",1,"form-control"],["type","number","formControlName","quantity",1,"form-control"],[1,"mb-3"],["type","text","formControlName","name",1,"form-control"],[1,"mb-2"],["type","text","formControlName","formula",1,"form-control"],[1,"mb-3","mt-4"],["newFile",""],["type","file","accept","image/*",3,"change"],[1,"mb-1","mt-2"],["color","primary","formControlName","status"],[1,"dialog-footer"],["type","submit","mat-button","",1,"btn-save",3,"disabled","click"],["mode","indeterminate"]],template:function(o,n){1&o&&(t.TgZ(0,"form",0)(1,"div",1),t.NdJ("click",function(){return n.closeDialog()}),t.qZA(),t.TgZ(2,"div",2),t._uU(3),t.qZA(),t.YNc(4,T,1,0,"mat-progress-bar",3),t.TgZ(5,"div",4)(6,"div",5)(7,"div",6)(8,"label",7),t._uU(9,"C\xf3digo"),t.qZA(),t.TgZ(10,"span",8),t._uU(11," * "),t.qZA(),t._UZ(12,"input",9),t.qZA(),t.TgZ(13,"div",6)(14,"label",7),t._uU(15,"Quantidade"),t.qZA(),t.TgZ(16,"span",8),t._uU(17," * "),t.qZA(),t._UZ(18,"input",10),t.qZA()(),t.TgZ(19,"div",11)(20,"label",7),t._uU(21,"Nome"),t.qZA(),t.TgZ(22,"span",8),t._uU(23," * "),t.qZA(),t._UZ(24,"input",12),t.qZA(),t.TgZ(25,"div",13)(26,"label",7),t._uU(27,"F\xf3rmula"),t.qZA(),t.TgZ(28,"span",8),t._uU(29," * "),t.qZA(),t._UZ(30,"input",14),t.qZA(),t.TgZ(31,"div",15),t.YNc(32,b,2,0,"ng-template",null,16,t.W1O),t.TgZ(34,"input",17),t.NdJ("change",function(r){return n.selectFile(r)}),t.qZA()(),t.TgZ(35,"div",18)(36,"mat-slide-toggle",19),t._uU(37,"Status"),t.qZA()()(),t.TgZ(38,"div",20)(39,"button",21),t.NdJ("click",function(){return n.save(!0)}),t._uU(40,"Salvar e Fechar"),t.qZA()()()),2&o&&(t.Q6J("formGroup",n.form),t.xp6(3),t.Oqu(n.stockFlower?"Editar Item":"Novo Item"),t.xp6(1),t.Q6J("ngIf",n.loading),t.xp6(35),t.Q6J("disabled",!n.canSave()))},dependencies:[u.O5,w.pW,v.hX,S.lW,l._Y,l.Fj,l.wV,l.JJ,l.JL,l.sg,l.u,d.uh,x.Rr,f.Zt,f.Bh],styles:[".dialog-header[_ngcontent-%COMP%]{font-weight:400;font-size:18px;width:auto;border-bottom:1px solid #d9d9d9;padding:10px 15px;background-color:#f8f7f7;margin-bottom:0;height:50px;cursor:grab}.dialog-body[_ngcontent-%COMP%]{padding:20px;min-width:500px;max-height:360px;overflow-y:auto}.dialog-footer[_ngcontent-%COMP%]{border-top:1px solid #d9d9d9;background-color:#f8f7f7;height:60px}.btn-close[_ngcontent-%COMP%]{float:right;font-size:30px;margin-top:2px}"]}),e})();var y=s(9019),A=s(2687),U=s(4868),N=s(4144),D=s(266);function B(e,a){1&e&&t._UZ(0,"mat-progress-bar",26)}function L(e,a){1&e&&(t.TgZ(0,"th",27),t._uU(1," Imagem "),t.qZA())}function Y(e,a){if(1&e){const o=t.EpF();t.TgZ(0,"td",28),t.NdJ("click",function(){const r=t.CHM(o).$implicit,m=t.oxw();return t.KtG(m.openImageDialog(r.image))}),t._UZ(1,"img",29),t.qZA()}if(2&e){const o=a.$implicit;t.xp6(1),t.Q6J("src",o.image,t.LSH)}}function q(e,a){1&e&&(t.TgZ(0,"th",27),t._uU(1," C\xf3digo "),t.qZA())}function I(e,a){if(1&e&&(t.TgZ(0,"td",30),t._uU(1),t.qZA()),2&e){const o=a.$implicit;t.xp6(1),t.hij(" ",o.code," ")}}function M(e,a){1&e&&(t.TgZ(0,"th",27),t._uU(1," Nome "),t.qZA())}function J(e,a){if(1&e&&(t.TgZ(0,"td",30),t._uU(1),t.qZA()),2&e){const o=a.$implicit;t.xp6(1),t.hij(" ",o.name," ")}}function O(e,a){1&e&&(t.TgZ(0,"th",27),t._uU(1," Quantidade "),t.qZA())}function Q(e,a){if(1&e&&(t.TgZ(0,"td",30),t._uU(1),t.qZA()),2&e){const o=a.$implicit;t.xp6(1),t.hij(" ",o.quantity," ")}}function P(e,a){1&e&&(t.TgZ(0,"th",27),t._uU(1," F\xf3rmula "),t.qZA())}function E(e,a){if(1&e&&(t.TgZ(0,"td",30),t._uU(1),t.qZA()),2&e){const o=a.$implicit;t.xp6(1),t.hij(" ",o.formula," ")}}function z(e,a){1&e&&(t.TgZ(0,"th",27),t._uU(1," Status "),t.qZA())}function R(e,a){1&e&&(t.TgZ(0,"span",33),t._uU(1,"Ativo"),t.qZA())}function H(e,a){1&e&&(t.TgZ(0,"span",34),t._uU(1,"Inativo"),t.qZA())}function j(e,a){if(1&e&&(t.TgZ(0,"td",30),t.YNc(1,R,2,0,"span",31),t.YNc(2,H,2,0,"span",32),t.qZA()),2&e){const o=a.$implicit;t.xp6(1),t.Q6J("ngIf",o.status),t.xp6(1),t.Q6J("ngIf",!o.status)}}function G(e,a){1&e&&t._UZ(0,"th",35)}function $(e,a){if(1&e){const o=t.EpF();t.TgZ(0,"td",30)(1,"div",36)(2,"button",37),t.NdJ("click",function(){const r=t.CHM(o).$implicit,m=t.oxw();return t.KtG(m.openStockFlowersDialog(r))}),t._UZ(3,"i",38),t.qZA(),t.TgZ(4,"button",39),t.NdJ("click",function(){const r=t.CHM(o).$implicit,m=t.oxw();return t.KtG(m.delete(r.id))}),t._UZ(5,"i",40),t.qZA()()()}}function W(e,a){1&e&&t._UZ(0,"tr",41)}function K(e,a){1&e&&t._UZ(0,"tr",42)}const V=function(){return[25,50,100]},X=[{path:"",component:(()=>{class e{constructor(o,n,i,r,m,nt){this._liveAnnouncer=o,this.dialog=n,this._snackBar=i,this.router=r,this.dialogService=m,this.stockFlowersResource=nt,this.loading=!1,this.stockFlowers=[],this.displayedColumns=["image","code","name","quantity","formula","status","options"],this.dataSource=new c.by}ngOnInit(){this.downloadStockFlowers(),this.downloadImage()}ngAfterViewInit(){this.dataSource.sort=this.sort,this.dataSource.paginator=this.paginator}applyFilter(o){this.dataSource.filter=o.target.value.trim().toLowerCase()}sortChange(o){this._liveAnnouncer.announce(o.direction?`Sorted ${o.direction}ending`:"Sorting cleared")}openStockFlowersDialog(o){this.dialog.open(h,{width:"600px",maxHeight:"100vh",panelClass:"dialog",autoFocus:!1,data:{stockFlower:o}}).afterClosed().subscribe(i=>{i&&(this.downloadStockFlowers(),this.downloadImage())})}openImageDialog(o){this.dialog.open(Z.H,{maxWidth:"60vw",maxHeight:"80vh",panelClass:"dialog",data:{imageUrl:o}}).afterClosed().subscribe(i=>{i&&(this.downloadStockFlowers(),this.downloadImage())})}downloadImage(){this.loading=!0,this.stockFlowersResource.list().then(o=>{o.forEach(n=>{n.image=y.N.apiBaseUrlPublic+n.image}),this.dataSource.data=o,this.status=o.status}).catch(o=>{this.openSnackBar("Erro ao listar","Fechar","danger"),console.log(o)}).finally(()=>{this.loading=!1})}downloadStockFlowers(){this.loading=!0,this.stockFlowersResource.list().then(o=>{this.dataSource.data=o,this.stockFlowers=o,this.status=o.status}).catch(o=>{this.openSnackBar("Erro ao listar","Fechar","danger"),console.log(o)}).finally(()=>{this.loading=!1})}delete(o){this.dialogService.openConfirmDialog("Excluir","Tem certeza que deseja excluir?").afterClosed().subscribe(n=>{n&&(this.loading=!0,this.stockFlowersResource.delete(o).then(()=>{this.downloadStockFlowers(),this.openSnackBar("Exclu\xeddo com sucesso!","Fechar","success")}).catch(i=>{this.openSnackBar("Erro ao excluir","Fechar","danger"),console.log(i)}).finally(()=>{this.loading=!1}))})}openSnackBar(o,n,i){this._snackBar.open(o,n,{horizontalPosition:"right",verticalPosition:"bottom",duration:3e3,panelClass:"snackBar-"+i})}}return e.\u0275fac=function(o){return new(o||e)(t.Y36(A.Kd),t.Y36(d.uw),t.Y36(_.ux),t.Y36(p.F0),t.Y36(U.x),t.Y36(C.k))},e.\u0275cmp=t.Xpm({type:e,selectors:[["app-stock-flowers-list"]],viewQuery:function(o,n){if(1&o&&(t.Gf(k.NW,5),t.Gf(g.YE,5)),2&o){let i;t.iGM(i=t.CRH())&&(n.paginator=i.first),t.iGM(i=t.CRH())&&(n.sort=i.first)}},decls:42,vars:6,consts:[["id","main",1,"main"],[1,"pagetitle"],[1,"border-loading"],["style","height: 3px; border-radius: 50px","color","accent","mode","indeterminate",4,"ngIf"],[1,"header-table"],[1,"d-flex","align-items-center","justify-content-between"],[1,"search_input_group","search-table","w-25","mt-4","mb-4"],[1,"mdi","mdi-magnify"],["matInput","","placeholder","Pesquisar",1,"search_input",3,"input"],["input",""],["mat-stroked-button","","type","button",1,"button-add",3,"click"],["mat-table","","matSort","",3,"dataSource","matSortChange"],["matColumnDef","image"],["mat-header-cell","","mat-sort-header","",4,"matHeaderCellDef"],["mat-cell","",3,"click",4,"matCellDef"],["matColumnDef","code"],["mat-cell","",4,"matCellDef"],["matColumnDef","name"],["matColumnDef","quantity"],["matColumnDef","formula"],["matColumnDef","status"],["matColumnDef","options"],["mat-header-cell","",4,"matHeaderCellDef"],["mat-header-row","",4,"matHeaderRowDef"],["mat-row","",4,"matRowDef","matRowDefColumns"],[1,"mat-paginator",3,"pageSizeOptions"],["color","accent","mode","indeterminate",2,"height","3px","border-radius","50px"],["mat-header-cell","","mat-sort-header",""],["mat-cell","",3,"click"],["alt","Imagem",1,"zoom-image",3,"src"],["mat-cell",""],["class","badge bg-success",4,"ngIf"],["class","badge bg-danger",4,"ngIf"],[1,"badge","bg-success"],[1,"badge","bg-danger"],["mat-header-cell",""],[1,"mat-icon-no-color"],["matTooltip","Editar",1,"icons-options",3,"click"],[1,"mdi","mdi-square-edit-outline"],["matTooltip","Excluir",1,"icons-options",3,"click"],[1,"mdi","mdi-trash-can-outline"],["mat-header-row",""],["mat-row",""]],template:function(o,n){1&o&&(t.TgZ(0,"main",0)(1,"div",1)(2,"h1"),t._uU(3,"Lista de Flores"),t.qZA()(),t.TgZ(4,"div",2),t.YNc(5,B,1,0,"mat-progress-bar",3),t.qZA(),t.TgZ(6,"div",4)(7,"div",5)(8,"div",6),t._UZ(9,"i",7),t._uU(10,"\xa0 "),t.TgZ(11,"input",8,9),t.NdJ("input",function(r){return n.applyFilter(r)}),t.qZA()(),t.TgZ(13,"div")(14,"button",10),t.NdJ("click",function(){return n.openStockFlowersDialog()}),t._uU(15,"Adicionar"),t.qZA()()(),t.TgZ(16,"div")(17,"table",11),t.NdJ("matSortChange",function(r){return n.sortChange(r)}),t.ynx(18,12),t.YNc(19,L,2,0,"th",13),t.YNc(20,Y,2,1,"td",14),t.BQk(),t.ynx(21,15),t.YNc(22,q,2,0,"th",13),t.YNc(23,I,2,1,"td",16),t.BQk(),t.ynx(24,17),t.YNc(25,M,2,0,"th",13),t.YNc(26,J,2,1,"td",16),t.BQk(),t.ynx(27,18),t.YNc(28,O,2,0,"th",13),t.YNc(29,Q,2,1,"td",16),t.BQk(),t.ynx(30,19),t.YNc(31,P,2,0,"th",13),t.YNc(32,E,2,1,"td",16),t.BQk(),t.ynx(33,20),t.YNc(34,z,2,0,"th",13),t.YNc(35,j,3,2,"td",16),t.BQk(),t.ynx(36,21),t.YNc(37,G,1,0,"th",22),t.YNc(38,$,6,0,"td",16),t.BQk(),t.YNc(39,W,1,0,"tr",23),t.YNc(40,K,1,0,"tr",24),t.qZA(),t._UZ(41,"mat-paginator",25),t.qZA()()()),2&o&&(t.xp6(5),t.Q6J("ngIf",n.loading),t.xp6(12),t.Q6J("dataSource",n.dataSource),t.xp6(22),t.Q6J("matHeaderRowDef",n.displayedColumns),t.xp6(1),t.Q6J("matRowDefColumns",n.displayedColumns),t.xp6(1),t.Q6J("pageSizeOptions",t.DdM(5,V)))},dependencies:[u.O5,k.NW,w.pW,g.YE,g.nU,S.lW,N.Nt,D.gM,c.BZ,c.fO,c.as,c.w1,c.Dz,c.nj,c.ge,c.ev,c.XQ,c.Gk],styles:['table[_ngcontent-%COMP%]{width:100%}h1[_ngcontent-%COMP%]{margin-top:20px}.button-add[_ngcontent-%COMP%]{border-radius:10px;margin-right:20px;font-size:16px;background-color:#7048ef;color:#fff;display:flex;align-items:center}.mat-header-cell[_ngcontent-%COMP%]{color:#484848;background-color:#f8f7f7;font-size:15px;font-family:TT Commons DemiBold,sans-serif}th.mat-header-cell[_ngcontent-%COMP%]:last-of-type, td.mat-cell[_ngcontent-%COMP%]:last-of-type, td.mat-footer-cell[_ngcontent-%COMP%]:last-of-type{padding-right:0!important}.mdi-magnify[_ngcontent-%COMP%]:before{content:"\\f0349";font-size:smaller}.mat-paginator[_ngcontent-%COMP%]{background-color:#f8f7f7;border-radius:10px}.zoom-image[_ngcontent-%COMP%]{position:relative;display:inline-block;width:40px;height:40px;margin-top:5px;margin-bottom:5px;border-radius:10px;background-color:#eee;box-shadow:0 1px 2px #0000001a;transition:all .6s cubic-bezier(.165,.84,.44,1)}.zoom-image[_ngcontent-%COMP%]:hover{transform:scale(1.1)}.zoom-image[_ngcontent-%COMP%]:hover:after{opacity:1}']}),e})()},{path:"new",component:h},{path:":id/edit",component:h}];let tt=(()=>{class e{}return e.\u0275fac=function(o){return new(o||e)},e.\u0275mod=t.oAB({type:e}),e.\u0275inj=t.cJS({imports:[p.Bz.forChild(X),p.Bz]}),e})();var ot=s(1108);let et=(()=>{class e{}return e.\u0275fac=function(o){return new(o||e)},e.\u0275mod=t.oAB({type:e}),e.\u0275inj=t.cJS({imports:[u.ez,tt,ot.m,f._t]}),e})()}}]);