require 'json'


file = File.open "composer.json"
data = JSON.load file
file.close
# data = JSON.parse(File.read('composer.json'))
# JSON.parse(json_string)


add_libs = []
# add_libs << ["infyomlabs/routes-explorer", "dev-master"]
add_libs << ["infyomlabs/generator-builder", "dev-master"]
    # "infyomlabs/laravel-generator": "6.0.x-dev",
    # "laravelcollective/html": "^6.0",
    # "infyomlabs/adminlte-templates": "6.0.x-dev"
a = data['require'].to_a
add_libs.each { |e|
	a << e
}

data['require'] = a.to_h

p a.to_h
p data

File.open("composer.json","w") do |f|
  f.write(JSON.pretty_generate(data))
end


# php artisan vendor:publish
# php artisan infyom.publish:templates

