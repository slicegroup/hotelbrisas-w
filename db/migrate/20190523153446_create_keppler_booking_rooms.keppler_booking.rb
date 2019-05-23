# This migration comes from keppler_booking (originally 20190523153443)
class CreateKepplerBookingRooms < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_rooms do |t|
      t.string :name
      t.string :description_small
      t.text :description_big
      t.text :note
      t.string :cover
      t.string :permalink
      t.boolean :air_conditioner
      t.boolean :tv
      t.boolean :refrigerator
      t.boolean :bathroom
      t.boolean :carpet
      t.boolean :phone
      t.boolean :lock
      t.boolean :closet
      t.boolean :table
      t.boolean :internet
      t.boolean :room_service
      t.boolean :breakfast
      t.boolean :public
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end
