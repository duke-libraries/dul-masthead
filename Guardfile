# A sample Guardfile
# More info at https://github.com/guard/guard#readme

group :livereload do
    guard 'livereload' do
        watch(%r{\.(scss|css|js|html)})
    end
end

group :sass do
    guard :sass, :input => 'scss', :output => 'css'  do
     watch(%r{\.(scss)})
    end
end

group :uglify do
    guard "uglify", :input => "js/load-masthead.js", :output => "js/load-masthead.min.js"
end


