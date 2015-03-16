
		function update_clock(width){
		var now = new Date();
		var hours = now.getHours();
		var minutes = now.getMinutes();
		var seconds = now.getSeconds();
		hour_hand.rotate(30*hours+(minutes/2.5), width/2, width/2);
		minute_hand.rotate(6*minutes, width/2, width/2);
		second_hand.rotate(6*seconds, width/2, width/2);
		}
		
		function draw_clock(width, fillColor, strokeWidth, strokeColor, pinWidth, pinColor, hourHandLengh, hourHandColor, minuteHandLengh, minuteHandColor, secondHandLengh, secondHandExceeding, secondHandColor){
		canvas = Raphael("clock_id",width, width);
		var clock = canvas.circle(width/2,width/2,45);
		clock.attr({"fill":fillColor,"stroke":strokeColor,"stroke-width":strokeWidth})
		var hour_sign;
		for(i=0;i<12;i++){
		var start_x = width/2+Math.round(35*Math.cos(30*i*Math.PI/180));
		var start_y = width/2+Math.round(35*Math.sin(30*i*Math.PI/180));
		var end_x = width/2+Math.round(40*Math.cos(30*i*Math.PI/180));
		var end_y = width/2+Math.round(40*Math.sin(30*i*Math.PI/180));
		hour_sign = canvas.path("M"+start_x+" "+start_y+"L"+end_x+" "+end_y);
		}
		hour_hand = canvas.path("M"+width/2+" "+width/2+"L"+width/2+" "+((width/2)-hourHandLengh)+"");
		hour_hand.attr({stroke: hourHandColor, "stroke-width": 2});
		minute_hand = canvas.path("M"+width/2+" "+width/2+"L"+width/2+" "+((width/2)-minuteHandLengh)+"");
		minute_hand.attr({stroke: minuteHandColor, "stroke-width": 2});
		second_hand = canvas.path("M"+width/2+" "+((width/2)+secondHandExceeding)+"L"+width/2+" "+((width/2)-secondHandLengh)+"");
		second_hand.attr({stroke: secondHandColor, "stroke-width": 1});
		var pin = canvas.circle(width/2, width/2, pinWidth);
		pin.attr("fill", pinColor);
		update_clock(width)
		setInterval("update_clock("+width+")",1000);
		}

 