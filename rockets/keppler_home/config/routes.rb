KepplerHome::Engine.routes.draw do
  namespace :admin do
    scope :home, as: :home do
      resources :banners do
        post '/sort', action: :sort, on: :collection
        get '(page/:page)', action: :index, on: :collection, as: ''
        get '/clone', action: 'clone'
        post '/upload', action: 'upload', as: :upload
        post '/toggle', action: 'toggle', as: :toggle
        get '/reload', action: :reload, on: :collection
        delete '/destroy_multiple', action: :destroy_multiple, on: :collection
      end

    end
  end
end
