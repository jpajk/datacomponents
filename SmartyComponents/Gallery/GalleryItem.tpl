<div id="{{ collection.id }}" class="{{ collection.class }}">
	{% for item in collection %}
		{% include 'GalleryItem.html.twig' %}    
	{% endfor %}	
</div>
		