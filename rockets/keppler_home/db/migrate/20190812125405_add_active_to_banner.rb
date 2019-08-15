class AddActiveToBanner < ActiveRecord::Migration[5.2]
  def change
    add_column :keppler_home_banners, :active, :boolean, default: false
  end
end
