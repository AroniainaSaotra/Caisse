function listProduit(){
	$.ajax({
		type: 'ajax',
		url : 'produit/show',
		async : false,
		datatype : 'json',
		success : function(data){
			var html ='';
			var i;
			for(i=0; i<data.lenght; i++){
				html+= '<tr id="'+data[i].id+'">'+
							'<td>'+data[i].nomProduit+'">'+
							'<td>'+data[i].categorie+'">'+
							'<td>'+data[i].prix+'">'+
							'<td>'+data[i].quantiteStock+'">'+
							'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-idProduit="'+data[i].idProduit+'" data-nomProduit="'+data[i].nomProduit+'" data-categorie="'+data[i].categorie+'" data-prix="'+data[i].prix+'" data-quantiteStock="'+data[i].quantiteStock+'" >Edit</a>'+' '+
							'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-idProduit="'+data[i].idProduit+'">Delete</a>'+
						'</td>'+
						'</tr>';

			}
			$('#listeTout').html(html);
		}
	});
}

$('#saveProdForm').submit('click',function(){
	var prodName = $('#nomProduit').val();
	var prodCategorie = $('#categorie').val();
	var prodPrix = $('#prix').val();
	var prodStock = $('#quantiteStock').val();
			$.ajax({
			type : "POST",
			url  : "produit/save",
			dataType : "JSON",
			data : {nomProduit:prodName, categorie:prodCategorie, prix:prodPrix, quantiteStock:prodStock},
			success: function(data){
				$('#nomProduit').val("");
				$('#categorie').val("");
				$('#prix').modal('hide');
				$('#quantiteStock').val("");
				listProduit();
			}
		});
		return false;
})



$('#editProdForm').on('submit',function(){
		var prodId = $('#prodId').val();
		var prodName = $('#prodName').val();
		var prodCategorie = $('#prodCategorie').val();
		var prodPrix = $('#prodPrix').val();
		var prodStock = $('#prodStock').val();			
		$.ajax({
			type : "POST",
			url  : "produit/update",
			dataType : "JSON",
			data : {idProduit:prodId, nomProduit:prodName, categorie:prodCategorie, prix:prodPrix, quantiteStock:prodStock},
			success: function(data){
				$("#empId").val("");
				$("#prodName").val("");
				$('#prodCategorie').val("");
				$("#prodPrix").val("");
				$('#prodStock').val("");
				listProduit();
			}
		});
		return false;
	});