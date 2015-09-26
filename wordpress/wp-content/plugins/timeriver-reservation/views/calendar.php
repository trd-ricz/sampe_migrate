<style>
	.draggable { width: 100px; height: 20px; padding: 0em; float: left; margin: 10px; }
	.draggable p { margin: 0px; }
	.droppable { width: 100px; height: 20px; padding: 0; float: left; margin: 5px; }
	.show_status {
		font-size: 10px;
		color: red;
		font-weight: bold;
	}
	
	.class_room {
		background-color: #f0b67f;
	}
	.class_type {
		background-color: #F2CCC3;
	}
	.teacher {
		background-color: #d6d1b1;
	}
	.student {
		background-color: #c7efcf;
	}
	
	
	.ui-state-target {
		border: 1px solid #000;
		background-color: #fff;
		font-weight: bold;
	}
	.ui-state-hover {
		border: 1px solid red;
		background-color: #fff;
	}
	
	
</style>

<script>
(function($){
	$(function() {
		$( ".draggable" ).draggable({ revert: "valid" });
		 
		$( ".droppable" ).droppable({
			activeClass: "ui-state-target",
			hoverClass: "ui-state-hover",
			drop: function( event, ui ) {
				var name = ui.draggable.context.innerText;
				var class_name_draggable = ui.draggable.context.classList[1];
				var class_name_droppable = $( this ).context.classList[1];
				//console.log(ui.draggable.context.classList[1]);
				//console.log(class_name_droppable);
				if (class_name_draggable != class_name_droppable) { return; }
				var titleDom = $('<span>' + name + '</span>');
				var statusDom = $('<span class="show_status">更新</span>');
				$( this ).find( "p" ).html('');
				$( this ).find( "p" ).append(titleDom);
				$( this ).find( "p" ).append(statusDom);
				statusDom.fadeOut(5000);
			}
		});
	});
})(jQuery);
</script>

<div class="draggable class_room">
	<p>cube-01</p>
</div>
<div class="draggable class_room">
	<p>cube-02</p>
</div>

<div class="draggable class_type">
	<p>Man-to-Man</p>
</div>



<table class="wp-list-table widefat striped">
	<tr>
		<th>時間</th><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th>
	</tr>
	<tr>
		<td>
			7:50 - 8:00
		</td>
		<td>
			<div class="droppable class_room">
				<p>教室</p>
			</div>
			<div class="droppable class_type">
				<p>講座名</p>
			</div>
			<div class="droppable teacher">
				<p>講師</p>
			</div>
			<div class="droppable student">
				<p>生徒</p>
			</div>
		</td>
		<td>
			<div class="droppable class_room">
				<p>教室</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講座名</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講師</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>生徒</p>
			</div>
		</td>
		<td>
			<div class="droppable class_room">
				<p>教室</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講座名</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講師</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>生徒</p>
			</div>
		</td>
		<td>
			<div class="droppable class_room">
				<p>教室</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講座名</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講師</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>生徒</p>
			</div>
		</td>
		<td>
			<div class="droppable ui-widget-header">
				<p>教室</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講座名</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講師</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>生徒</p>
			</div>
		</td>
		<td>
			<div class="droppable ui-widget-header">
				<p>教室</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講座名</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講師</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>生徒</p>
			</div>
		</td>
		<td>
			<div class="droppable ui-widget-header">
				<p>教室</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講座名</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>講師</p>
			</div>
			<div class="droppable ui-widget-header">
				<p>生徒</p>
			</div>
		</td>
		
	</tr>
</table>