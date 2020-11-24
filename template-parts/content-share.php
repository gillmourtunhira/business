<div class="social-icons">
	<?php 

		$title = get_the_title();
		$permalink = get_permalink();

		$twitterHandler = 'iBusiness101';

		$twitter = 'https://twitter.com/intent/tweet?text=' . $title .'&amp;url='. $permalink .'&amp;via='. $twitterHandler .'';
		$facebook = 'https://facebook.com/sharer/sharer.php?u=' . $permalink;
		$whatsapp = 'https://web.whatsapp.com/send?text='. $title . '&nbsp;'. $permalink .' ';
		$mail_to = 'mailto:?body='. $title . '&nbsp;'. $permalink .'subject='.$title.' ';
		$linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $permalink  . '&title='. $title .' ';

	?>
	<ul>
		<h5>Share this Article</h5>
		<li><a href="<?php echo $facebook ?>" rel="nofollow"><span class="dashicons dashicons-facebook"></span></a></li>
		<li><a href="<?php echo $twitter ?>" rel="nofollow"><span class="dashicons dashicons-twitter"></span></a></li>
		<li><a href="<?php echo $whatsapp ?>">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 418.135 418.135" style="enable-background:new 0 0 418.135 418.135;" xml:space="preserve" width="20px" height="20px"><g><g>
				<path d="M198.929,0.242C88.5,5.5,1.356,97.466,1.691,208.02c0.102,33.672,8.231,65.454,22.571,93.536   L2.245,408.429c-1.191,5.781,4.023,10.843,9.766,9.483l104.723-24.811c26.905,13.402,57.125,21.143,89.108,21.631   c112.869,1.724,206.982-87.897,210.5-200.724C420.113,93.065,320.295-5.538,198.929,0.242z M323.886,322.197   c-30.669,30.669-71.446,47.559-114.818,47.559c-25.396,0-49.71-5.698-72.269-16.935l-14.584-7.265l-64.206,15.212l13.515-65.607   l-7.185-14.07c-11.711-22.935-17.649-47.736-17.649-73.713c0-43.373,16.89-84.149,47.559-114.819   c30.395-30.395,71.837-47.56,114.822-47.56C252.443,45,293.218,61.89,323.887,92.558c30.669,30.669,47.559,71.445,47.56,114.817   C371.446,250.361,354.281,291.803,323.886,322.197z" data-original="#7AD06D" class="active-path" data-old_color="#7AD06D" fill="#33A6D5"/>
				<path d="M309.712,252.351l-40.169-11.534c-5.281-1.516-10.968-0.018-14.816,3.903l-9.823,10.008   c-4.142,4.22-10.427,5.576-15.909,3.358c-19.002-7.69-58.974-43.23-69.182-61.007c-2.945-5.128-2.458-11.539,1.158-16.218   l8.576-11.095c3.36-4.347,4.069-10.185,1.847-15.21l-16.9-38.223c-4.048-9.155-15.747-11.82-23.39-5.356   c-11.211,9.482-24.513,23.891-26.13,39.854c-2.851,28.144,9.219,63.622,54.862,106.222c52.73,49.215,94.956,55.717,122.449,49.057   c15.594-3.777,28.056-18.919,35.921-31.317C323.568,266.34,319.334,255.114,309.712,252.351z" data-original="#7AD06D" class="active-path" data-old_color="#7AD06D" fill="#33A6D5"/>
			</g></g>
			</svg>
		</a></li>
		<li><a href="<?php echo $mail_to ?>"><span class="dashicons dashicons-email"></span></a></li>
		<li><a href="<?php echo $linkedin ?>">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve" width="20px" height="20px" class=""><g><g>
	<circle style="fill:#33A6D5" cx="56.098" cy="56.097" r="56.098" data-original="#007AB9" class="active-path" data-old_color="#F8F8F8"/>
	<g>
		<path style="fill:#F3F3F4" d="M89.616,60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118    c-3.705,0-5.906,2.491-6.878,4.903c-0.353,0.862-0.444,2.059-0.444,3.268v22.524H48.684c0,0,0.18-36.546,0-40.329h13.411v5.715    c-0.027,0.045-0.065,0.089-0.089,0.132h0.089v-0.132c1.782-2.742,4.96-6.662,12.085-6.662    C83.002,42.462,89.616,48.226,89.616,60.611L89.616,60.611z M34.656,23.969c-4.587,0-7.588,3.011-7.588,6.967    c0,3.872,2.914,6.97,7.412,6.97h0.087c4.677,0,7.585-3.098,7.585-6.97C42.063,26.98,39.244,23.969,34.656,23.969L34.656,23.969z     M27.865,83.739H41.27V43.409H27.865V83.739z" data-original="#F1F2F2" class="" data-old_color="#EEF0F2"/>
	</g>
</g></g> </svg>
		</a></li>
	</ul>
</div>