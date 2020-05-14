$(function(){
	setInterval("time()", 1000);
	getMsg();
	fitcube();
});

window.onresize = function () {fitcube();}

function fitcube(){
	var el = $('.el span').width();
	$('.el span').css('height',el+'px');
}
function getMsg(){
	var slogan = [
		"成功率不到2%，那剩下的用勇气来补足吧",
		"万物皆虚<br>万物皆允",
		"你好，请多指教~",
		"当你在凝视着网页的时候<br>网页也正在凝视着你",
		"我知这世界，本如露水般短暂。然而，然而……",
		"休息对于生存而言，也是紧要问题。",
		"太想伸手摘取星星的人，常常忘记脚下的鲜花。",
		"己所欲者<br>杀而夺之<br>亦同天赐<br>吾愿利熙 ♪♫",
		"来去无常<br>得过且过",
		"所谓的「改变自己，世界就会随之改变」这种事，是不可能的。",
		"秩序是恶棍们的通行证，真正的美好应如无形的虚空，你是否仍感幸福？",
		"重要的不是你做了多少事，而是你放了多少心思进去。",
		"不管明天会发生什么，请牢记住今天。",
		"相思相见知何日？此时此夜难为情！",
		"天予不取，必遭天谴。"
	];
	var r = random(0,slogan.length-1);
	$("#slogan").html(slogan[r])
}
function random(Min,Max){
      var Range = Max - Min;
      var Rand = Math.random();
      var num = Min + Math.round(Rand * Range);
      return num;
}
function time() {
	var time = '#' + (new Date()).toTimeString().match(/\d{2}:\d{2}:\d{2}/)[0].replace(/:/g, '');
	$('.time').text(time);
	$('.background').css('background-color', time);
};