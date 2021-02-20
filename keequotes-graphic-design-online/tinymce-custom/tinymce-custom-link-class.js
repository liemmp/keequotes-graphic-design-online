(function() {
	tinymce.PluginManager.add( 'custom_link_class', function( editor, url ) {
		// Add Button to Visual Editor Toolbar
		editor.addButton('custom_link_class', {
			title: 'Add Design',
			image: url + '/design-service.png',
			cmd: 'custom_link_class',
			class:'asfdsafsaf'
		});	

		// Add Command when Button Clicked
		editor.addCommand('custom_link_class', function() {
			var a = document.querySelector('#add-design-editor');
			console.log(editor.id);
			for(var i in tinymce.editors){
				if(editor.id == tinymce.editors[i]['id'] && !isNaN(i))a.setAttribute('data-number',i);
			}
			a.click();

			// Ask the user to enter a URL
			// var result = 'test insert';
			// if ( !result ) {
			// 	// User cancelled - exit
			// 	return;
			// }
			// if (result.length === 0) {
			// 	// User didn't enter a URL - exit
			// 	return;
			// }
			//
			// // Insert selected text back into editor, wrapping it in an anchor tag
			// editor.execCommand('mceInsertContent', false, '<a href="' + result + '" class="button">' + result + '</a>');
		});
	});
})();