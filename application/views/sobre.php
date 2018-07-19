<section id="about">
			<div class="container">
				<div class="gray">
					<div class="heading">
						<h2>nós</h2>
						<p>descricao de nos.</p>
					</div>
					<div class="row">
						<ul class="team" id="og-grid" style="
    padding: 0px;
">
							<?php foreach ($data as $content): ?>
							<li class="col-md-3">
								<a href="#" class="team-member" data-title="<?php echo $content->nome; ?>" data-description="<?php echo $content->descricao; ?>">
									<img src="/irineu/uploads/<?php echo $content->arquivo; ?>" alt="" class="img-responsive" >
									<span class="name"><?php echo $content->nome; ?></span>
									<span class="title"><?php echo $content->cargo; ?></span>
								</a>
							</li>	
							<?php endforeach ?>												
						</ul>						
					</div>
				</div>
			</div>
</section>