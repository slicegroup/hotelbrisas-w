# This migration comes from keppler_home (originally 20190812125405)
class AddActiveToBanner < ActiveRecord::Migration[5.2]
  def change
    add_column :keppler_home_banners, :active, :boolean, default: false
  end
end
