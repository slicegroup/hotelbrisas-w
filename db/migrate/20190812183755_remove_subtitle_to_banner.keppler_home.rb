# This migration comes from keppler_home (originally 20190812183615)
class RemoveSubtitleToBanner < ActiveRecord::Migration[5.2]
  def change
  	remove_column :keppler_home_banners, :subtitle
  end
end
