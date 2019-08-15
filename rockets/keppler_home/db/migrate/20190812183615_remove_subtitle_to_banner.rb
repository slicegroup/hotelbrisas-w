class RemoveSubtitleToBanner < ActiveRecord::Migration[5.2]
  def change
  	remove_column :keppler_home_banners, :subtitle
  end
end
