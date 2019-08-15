class CreateKepplerHomeBanners < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_home_banners do |t|
      t.string :image
      t.string :title
      t.string :subtitle
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end
